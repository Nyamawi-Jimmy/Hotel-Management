<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.admin-sidebar activePage="user-management"></x-navbars.admin-sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Users"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class=" me-3 my-3 text-end">
                            <a onclick="openModal()" class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Add User</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="padding-left: 10px; padding-right: 10px;">
                                            ID
                                        </th>
                                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="padding-left: 10px; padding-right: 10px;">
                                            NAME
                                        </th>
                                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                            style="padding-left: 10px; padding-right: 10px;">
                                            EMAIL
                                        </th>
                                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                            style="padding-left: 10px; padding-right: 10px;">
                                            Property
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $user->id }}</td>
                                            <td class="text-center">{{ $user->name }}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">
                                                @if ($user->property_user)
                                                    @foreach ($user->property_user as $propertyUser)
                                                        @if ($propertyUser->property_id)
                                                            {{ $propertyUser->property->name }}
                                                            {{-- You can display other property attributes as needed --}}
                                                            <br>
                                                        @else
                                                            Property not found
                                                            <br>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    No properties
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a onclick="openEditModal('/user/{{ $user->id }}/find')" class="btn btn-warning mb-0">
                                                    <i class="material-icons text-sm">edit</i>
                                                </a> |
                                                <a onclick="openDeleteModal('/user/{{ $user->id }}/delete')" class="btn btn-danger mb-0">
                                                    <i class="material-icons text-sm">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach                                    </tbody>
                                </table>
                            </div>
                            <div aria-hidden="true" aria-labelledby="addPigModal" class="modal fade" id="addPigModal"
                                 role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-medium" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title font-weight-normal" id="settingsModalLabel">Add
                                                User</h5>
                                            <button aria-label="Close" class="btn-close text-dark"
                                                    data-bs-dismiss="modal" type="button">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body table-responsive">
                                            <form method="POST" action="{{ route('saveUser') }}">
                                                @csrf
                                                <div class="input-group input-group-outline mt-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                           value="{{ old('name') }}">
                                                </div>
                                                @error('name')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                                <div class="input-group input-group-outline mt-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                           value="{{ old('email') }}">
                                                </div>
                                                @error('email')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                                <div class="input-group input-group-outline my-3">
                                                    <select name="property" class="form-select">
                                                        <option selected disabled>Property</option>
                                                        @foreach ($properties as $property)
                                                            <option
                                                                value="{{$property->id}}"> {{$property->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group input-group-outline mt-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                @error('password')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                                <div class="form-check form-check-info text-start ps-0 mt-3">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        I agree the <a href="javascript:;"
                                                                       class="text-dark font-weight-bolder">Terms and
                                                            Conditions</a>
                                                    </label>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit"
                                                            class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                                                        Sign
                                                        Up
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div aria-hidden="true" aria-labelledby="addPigModal" class="modal fade" id="editPigModal"
                                 role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-medium" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title font-weight-normal" id="settingsModalLabel">Update
                                                Block</h5>
                                            <button aria-label="Close" class="btn-close text-dark"
                                                    data-bs-dismiss="modal" type="button">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body table-responsive">
                                            <form method="POST"
                                                  action="{{ isset($block) ? route('block.update', $block->id) : '#' }}">
                                                @csrf <!-- Add this line to include the CSRF token -->
                                                @method('PUT')
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="editName" name="name"
                                                           required>
                                                    <label for="name">Name</label>
                                                </div>
                                                <!-- Submit button -->
                                                <input type="submit" class="btn btn-primary" value="Update">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog"
                                 aria-labelledby="modal-delete"
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
                                        <div class="modal-
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
