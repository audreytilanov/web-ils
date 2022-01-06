<div class="widget rounded"  data-aos="fade-left" data-aos-delay="400">
    <div class="widget-header text-center">
      <h3 class="widget-title">Explore Topics</h3>
    </div>
    <div class="widget-content">
      <ul class="list">
        <li><a href="/">All<span >Visit</span></a></li>
        <li><a href="{{ route('pembangunan.view') }}">Pembangunan<span >( {{ $pembangunan }} )</span></a></li>
        <li><a href="{{ route('sejarah.view') }}">Sejarah<span >( {{ $sejarah }} )</span></a></li>
        <li><a href="{{ route('wisata.view') }}">Wisata Hiburan<span >( {{ $wisata }} )</span></a></li>
        <li><a href="{{ route('pantai.view') }}">Pantai<span >( {{ $pantai }} )</span></a></li>
        <li><a href="{{ route('desa.view') }}">Desa<span >( {{ $desa }} )</span></a></li>
        <li><a href="{{ route('pura.view') }}">Pura<span >( {{ $pura }} )</span></a></li>
        <li><a href="{{ route('makanan.view') }}">Makanan<span >( {{ $makanan }} )</span></a></li>
      </ul>
    </div> 
  </div>