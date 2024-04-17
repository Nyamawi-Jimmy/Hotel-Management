<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="rooms"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Rooms"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @if(session('success'))
                <div id="successMessage" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('fail'))
                <div id="failureMessage" class="alert alert-danger">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Rooms Table</h6>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a onclick="openModal()" class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Room</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ID
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            NAME
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            BLOCK
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            CATEGORY
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            RENT
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            DEPOSIT
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            STATUS
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td class="text-center">{{$room->id }}</td>
                                            <td class="text-center"><ID>{{$room->name }}</ID></td>
                                            <td class="text-center"><ID>{{$room->block }}</ID></td>
                                            <td class="text-center"><ID>{{$room->category }}</ID></td>
                                            <td class="text-center"><ID>{{$room->rent }}</ID></td>
                                            <td class="text-center"><ID>{{$room->deposit }}</ID></td>
                                            <td class="text-center"><ID>{{$room->status }}</ID></td>


                                            <td class="text-center">
                                                <a onclick="openEditModal('/room/' + {{$room->id}} + '/find')"
                                                   class="btn btn-warning mb-0"><i
                                                        class="material-icons text-sm">edit</i></a> | <a
                                                    onclick="openDeleteModal('/room/' + {{$room->id}} + '/delete')"
                                                    class="btn btn-danger mb-0"><i
                                                        class="material-icons text-sm">delete</i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <div aria-hidden="true" aria-labelledby="addPigModal" class="modal fade" id="addPigModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-medium" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="settingsModalLabel">Add Room</h5>
                    <button aria-label="Close" class="btn-close text-dark" data-bs-dismiss="modal" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <form method="POST" action="create">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" required>
                            <label for="name">Name</label>
                        </div>
                        <!-- your-view.blade.php -->

                        <div class="form-floating mb-3">
                            <select class="form-select" id="block_id" name="block_id" required>
                                @foreach ($blocks as $block)
                                    <option value="{{ $block->id }}">{{ $block->name }}</option>
                                @endforeach
                            </select>
                            <label for="name">Block</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="category" name="category" required>
                            <label for="name">Category</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="rent" name="rent" required>
                            <label for="name">Rent</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="deposit" name="deposit" required>
                            <label for="name">Deposit</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="deposit" name="status" required>
                            <label for="name">Status</label>
                        </div>
                        <!-- Submit button -->
                        <input type="submit" class="btn btn-primary" value="save">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="addPigModal" class="modal fade" id="editPigModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-medium" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="settingsModalLabel">Update Room</h5>
                    <button aria-label="Close" class="btn-close text-dark" data-bs-dismiss="modal" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <form method="POST"
                          action="{{ isset($room) ? route('update', $room->id) : '#' }}">
                        @csrf <!-- Add this line to include the CSRF token -->
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="block" name="block" required>
                            <label for="name">Block</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="category" name="category" required>
                            <label for="name">Category</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="rent" name="rent" required>
                            <label for="name">Rent</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="deposit" name="deposit" required>
                            <label for="name">Deposit</label>
                        </div>
                        <!-- Submit button -->
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete"
         aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                {{--<div class="modal-header">
                    <h6 class="modal-title font-weight-normal" id="modal-title-delete">Your attention is required</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>--}}
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="material-icons text-lg opacity-10">notifications</i>
                        <h4 class="text-gradient text-danger mt-4">Warning!</h4>
                        <p>Are you sure you want to delete this item.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="confirmDelete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary text-white ml-auto" data-bs-dismiss="modal">Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <x-plugins></x-plugins>

</x-layout>
