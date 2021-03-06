@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-bridge.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/banner-kegiatan-1.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('content')
  <section id="leaderboard">
    <div class="container py-4">
      <h1 class="fw-bold text-capitalize text-center text-primary">bridge tournament winner</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui 7 Oktober 2021</p>
      
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">#</th>
              <th scope="col">Nama Pemain 1</th>
              <th scope="col">Username BBO</th>
              <th scope="col">Asal Cabang</th>
              <th scope="col">Nama Pemain 2</th>
              <th scope="col">Username BBO</th>
              <th scope="col">Asal Cabang</th>
              <th class="text-center" scope="col">Score</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1st Winner</th>
              <td>I Wayan Eka Naradwitya Biantara</td>
              <td>Iwayaneka</td>
              <td>Sulawesi Utara, Gorontalo</td>
              <td>Stevan Elisender Miringan</td>
              <td>Siladen</td>
              <td>Sulawesi Utara, Gorontalo</td>
              <td>67.92</td>
            </tr>
            <tr>
              <th scope="row">2nd Winner</th>
              <td>Indra Fauzan</td>
              <td>indrafauza</td>
              <td>Divisi Human Capital, Kantor Pusat</td>
              <td>Hesti Juliningsih</td>
              <td>myday26</td>
              <td>Divisi Human Capital, Kantor Pusat</td>
              <td>65.05</td>
            </tr>
            <tr>
              <th scope="row">3rd Winner</th>
              <td>Noveda Mulya Wibowo</td>
              <td>Anak_baru</td>
              <td>Sumatra Utara</td>
              <td>Firginia Julianti</td>
              <td>undip</td>
              <td>Sumatra Utara</td>
              <td>62.73</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>
@endsection