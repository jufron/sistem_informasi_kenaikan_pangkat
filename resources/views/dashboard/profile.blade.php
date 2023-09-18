<x-layouts.app judul="Profile">

  <div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item">Profile</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-header">
            @if ($user->avatar)
            <img alt="image" src="{{ asset('storage/'.$user->avatar) }}" class="rounded-circle profile-widget-picture">
            @else
            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
            @endif
            <div class="profile-widget-items">
              <h2 class="ml-3 mt-3 h6">{{ auth()->user()->name }}</h2>
            </div>

          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">
              @rolle('super_admin')
                Super Admin
              @elserolle('sekertaris')
                Sekertaris
              @elserolle('kasubang')
                Kasubang
              @endrolle
            </div>
            {{ $user->deskripsi }}
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
          <form method="post" action="{{ route('dashboard.profile.update', $id) }}" class="needs-validation" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              @if (session('error'))
                <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                </div>
              @endif
                <div class="row">
                  <x-form
                    class-name="col-md-6 col-12"
                    input-lable="Username"
                    input-type="text"
                    input-placeHolder="masukan username"
                    name="name"
                    input-value="{{ old('name', $user->name) }}"
                  />
                  <x-form
                    class-name="col-md-6 col-12"
                    input-lable="Email"
                    input-type="email"
                    input-placeHolder="masukan email baru"
                    name="email"
                    input-value="{{ old('email', $user->email) }}"
                  />
                </div>
                <div class="row">
                  <x-form
                    class-name="col-md-6 col-12"
                    input-lable="Password Lama"
                    input-type="password"
                    input-placeHolder="masukan password lama"
                    name="password"
                  />
                </div>
                <div class="row">
                  <x-form
                    class-name="col-md-6 col-12"
                    input-lable="Password Baru"
                    input-type="password"
                    input-placeHolder="masukan password baru"
                    name="password-baru"
                  />
                  <x-form
                    class-name="col-md-6 col-12"
                    input-lable="Password Konfirmasi"
                    input-type="password"
                    input-placeHolder="masukan lagi password konfirmasi"
                    name="password-confirmation"
                  />
                </div>
                <div class="ml-1 mb-3 row">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="tampil-password">
                    <label class="form-check-label" for="tampil-password">
                      tampilkan password
                    </label>
                  </div>
                </div>
                <div class="row">
                  <x-form-file
                    className="col-md-6 col-12"
                    label="Foto"
                    id="input-image"
                    name="avatar"
                  />
                  <div class="col-md-6 col-12">
                    <img id="preview" src="" alt="avatar" class="w-50 profile-widget-picture img-responsive img-thumbnail">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control summernote-simple @error('deskripsi') is-invalid @enderror" name="deskripsi">
                      {{ old('deskripsi', $user->deskripsi) }}
                    </textarea>
                  </div>
                      @error('deskripsi')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-right">
              <x-button typeButton="submit" modal="false" className="btn btn-success">Perbaharui</x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <x-slot:scriptOptional>
    <script src="{{ asset('assets/js/myScript.js') }}"></script>
  </x-slot>
</x-layouts>
