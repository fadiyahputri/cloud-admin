@extends('SmkTarunaBhakti.layouts.NavbarAndFooter')

@section('title', 'Visi Dan Misi')

@section('webcontent')
<div class="artikel">
    <!-- tanggal, kategori -->
    <div class="artikel-kategori">
      <a href="">Beranda,</a>
      <a href="">Profil,</a>
      <a href="">Visi dan Misi</a>
    </div>

    <!-- judul artikel -->
    <div class="artikel-judul">
      <p>Visi dan Misi</p>
    </div>

    <!-- isi text artikel -->
    <div class="artikel-text" style="font-size: 1vw;">

      <div class="table-artikel">

        <div class="detail-artikel">
          <div class="img-detailartikel">
            <img src="assetsweb/assets/profil/School_Outline.svg" alt="">
          </div>

          <div class="text-detailidentitas">
            <h2>Visi SMK Taruna Bhakti</h2>
            <p>Menghasilkan lulusan yang kompeten dalam IPTEK DAN IMTAQ, serta mampu bersaing pada tingkat nasional dan global</p>
          </div>


        </div>

      </div>

      <div class="table-artikel">

        <div class="detail-artikel">
          
          <div class="text-detailidentitas">
            <h2>Misi SMK Taruna Bhakti</h2>
            <table>
              <tr>
                <td class="td-no">1.</td>
                <td class="td-isidetail">Menumbuhkan Semangat Kreatifitas, Bersinergi Dan Kompetitif Kepada Seluruh Warga Sekolah.
                </td>
              </tr>
              <tr>
                <td class="td-no">2.</td>
                <td class="td-isidetail">Melaksanakan Kurikulum Melalui Pembelajaran Dan Penilaian Berbasis Kompetensi, Berbasis Wirausaha Berwawasan Lingkungan.</td>
              </tr>
              <tr>
                <td class="td-no">3.</td>
                <td class="td-isidetail">Meningkatkan kualitas sumber daya manusia melalui sertifikasi Kompetensi Tingkat Nasional dan Internasional
                </td>
              </tr>
              <tr>
                <td class="td-no">4.</td>
                <td class="td-isidetail">Mengembangkan Potensi Peserta Didik Melalui Kegiatan Minat Dan Bakat Dan Pembinaan Kedisiplinan.</td>
              </tr>
              <tr>
                <td class="td-no">5.</td>
                <td class="td-isidetail">Menerapkan Layanan Prima Dalam Pengelolaan Sekolah Melalui Sistem Manajemen Mutu
                </td>
              </tr>
            </table>
          </div>

          <div class="img-detailartikel">
            <img src="assetsweb/assets/profil/School_Flatline (1).svg" alt="">
          </div>
        </div>

      </div>

    </div>
  </div>
@endsection