@extends('layouts.sideNav')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Activity Details</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row">
                        <div class="col">
                            <form action="" enctype="multipart/form-data" method="POST" id="formNew" onsubmit="upload()">
                                @csrf
                                <input type="text" class="form-control" value="addActv" id="addActv" name="addActv" hidden>

                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="shortName">Location</label>
                                        <input type="text" class="form-control" id="shortName" name="shortName" placeholder="Short Name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="icNumber">Date</label>
                                        <input type="text" class="form-control" id="icNumber" name="icNumber" placeholder="IC Number" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phoneNumber">Description</label>
                                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="position">Pax</label>
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Position" required>
                                    </div>
                                </div>

                                <div class="card-footer" style="float: right;">
                                    <a href="{{ url()->previous() }}" class="btn btn-danger btn-md">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    function upload() {

        let timerInterval
        Swal.fire({
            title: 'Submitted...',
            showConfirmButton: false,
            html: 'Please wait while system submit the new activity proposal..',
            timerProgressBar: true,
            allowOutsideClick: false,
            willOpen: () => {
                Swal.showLoading()
            }
        })
    }
</script>


@endsection