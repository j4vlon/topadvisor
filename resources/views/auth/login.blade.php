<style>
    .btn-color{
        background-color: #0e1c36;
        color: #fff;

    }

    .profile-image-pic{
        height: 200px;
        width: 200px;
        object-fit: cover;
    }



    .cardbody-color{
        background-color: #ebf2fa;
        margin-bottom: 0;
    }

    a{
        text-decoration: none;
    }
</style>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card my-5">

                <form class="card-body cardbody-color p-lg-5" action="{{ route('admin.login_process') }}" method="POST">
                    @csrf
                    <div class="text-center" style="margin-bottom: 50px">
                        <img src="https://topadvisor.biz/assets/images/logos/advisor-black.svg"
                             width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                               placeholder="введите email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
                </form>
            </div>

        </div>
    </div>
</div>
