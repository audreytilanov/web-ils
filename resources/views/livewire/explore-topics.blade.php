<div class="widget rounded"  data-aos="fade-left" data-aos-delay="400">
    <div class="widget-header text-center">
      <h3 class="widget-title">Explore Topics</h3>
    </div>
    <div class="widget-content">
      <ul class="list">
        <li><a href="/">All<span class="text-warning">Visit</span></a></li>
        <li><a href="{{ route('sejarah.view') }}">Sejarah<span class="text-warning">( {{ $sejarah }} )</span></a></li>
        <li><a href="{{ route('wisata.view') }}">Wisata Hiburan<span class="text-warning">( {{ $wisata }} )</span></a></li>
        <li><a href="{{ route('pantai.view') }}">Pantai<span class="text-warning">( {{ $pantai }} )</span></a></li>
        <li><a href="{{ route('desa.view') }}">Desa<span class="text-warning">( {{ $desa }} )</span></a></li>
        <li><a href="{{ route('pura.view') }}">Pura<span class="text-warning">( {{ $pura }} )</span></a></li>
        <li><a href="{{ route('makanan.view') }}">Makanan<span class="text-warning">( {{ $makanan }} )</span></a></li>
      </ul>
    </div> 
  </div>