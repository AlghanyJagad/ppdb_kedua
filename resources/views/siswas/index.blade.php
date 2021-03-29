@extends('siswas.layout')
 
@section('content')
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container-fluid">
      <div class="d-flex align-items-center">

        <div class="mx-auto text-center">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
            </ul>
          </nav>
        </div>

        <div class="ml-auto w-25">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
              <li class="cta"><a href="/" class="nav-link"><span>Keluar</span></a></li>
            </ul>
          </nav>
          <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
        </div>
      </div>
    </div>
    
  </header>

  <div class="site-section bg-light" id="contact-section">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>PPDB</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('siswa.create') }}"> Tambah Siswa</a>
                    </div>
                </div>
            </div>
        
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Asal Sekolah</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->jns_kelamin }}</td>
                    <td>{{ $siswa->tempat_lahir }}</td>
                    <td>{{ $siswa->tgl_lahir }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->asal_sekolah }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>
                        <form action="{{ route('siswa.destroy',$siswa->nis) }}" method="POST">
        
                            <a class="btn btn-info nav-link" href="{{ route('siswa.show',$siswa->nis) }}">Show</a>
            
                            <a class="btn btn-primary nav-link" href="{{ route('siswa.edit',$siswa->nis) }}">Edit</a>
        
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="btn btn-danger nav-link">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
  </div>
  
    {!! $siswas->links() !!}
      
@endsection