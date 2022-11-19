<section>
  <div class="rt-container">
    <div class="col-rt-12">
      <div class="Scriptcontent">
        <div class="carrousel bordered" style="height: 70vh">
          <h2>Apa yang mereka katakan tentang Bali?</h2>			
          @foreach ($contents as $content)
          <input type="radio" name="slides" id="radio-{{ $loop->iteration }}" checked>
          @endforeach
          <ul class="slides">
              @foreach ($contents as $content)
              <li class="slide">
                <p>
                    <q>{{ $content->quote }}</q> 
                  <span class="author">
                  <img src="{{ URL::asset('asset/review/'.$content->foto) }}">
                  {{ $content->nama_orang }}
                  </span>
                </p>
                </li>        
                @endforeach
          </ul>
          <div class="slidesNavigation">
          @foreach ($contents as $content)

            <label for="radio-{{ $loop->iteration }}" id="dotForRadio-{{ $loop->iteration }}"></label>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>