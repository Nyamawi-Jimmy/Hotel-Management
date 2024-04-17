<?php

namespace App\Http\Controllers;

use App\Models\Blocks;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class BlocksController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }

            $block = new Blocks();
            $block->name = $request->input('name');

            $propertyId = app(SessionsController::class)->getPropertyId();
            $block->property_id = $propertyId;

            if ($block->save()) {
                return back()->with('success', 'Block added successful');
            } else {
                return back()->with('fail', 'An error occurred');
            }
        } catch (Exception $e) {
            Log::error('Error saving block: ' . $e->getMessage());
            return back()->with('fail', $e->getMessage());
        }
        /*$property = Properties::findOrFail($block->block_id);

        return response()->json([
            'message' => 'Block created successfully',
            'name' => $property->name,
            'block_id' => $property->id
        ]);*/
    }

    public function getAllBlocks() {
        $blocks = Blocks::where('property_id', app(SessionsController::class)->getPropertyId())->get();
        return $blocks;
    }

    public function index()
    {
        $blocks = $this->getAllBlocks();
        return view('pages.blocks', compact('blocks'));
    }

    public function findBlock($id)
    {
        $block = Blocks::find($id);

        return $block;
    }

    public function update(Request $request, $id)
    {
        $block = $this->findBlock($id);
        $block->name = $request->input('name');

        if ($block->save()) {
            return back()->with('success', 'Block updated successfully');
        } else {
            return back()->with('fail', 'An error occurred');
        }
    }

    public function delete($id) {
        $block = Blocks::find($id);
        $block->delete();

        return redirect() -> back() ->with('success', 'Block deleted successfully');
    }

    public function view($id) {

        $blocks = $this->findBlock($id);
        return view('pages.view-block', compact('blocks'));
    }


}
