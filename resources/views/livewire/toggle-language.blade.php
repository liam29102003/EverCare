{{-- <div class="dropdown dropup footer-link me-3">
    <button
      type="button"
      class="btn btn-sm btn-outline-secondary dropdown-toggle"
      data-bs-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false"
      id="hello"
    >
      {{ __('Select language') }}
    </button>
      
    <div class=" dropdown-menu1 dropup card d-none " style="position:absolute !important; margin-top:-210px">
     
      @foreach (config('localization.locales') as $locale)
        <p wire:click='change( $locale )' class="dropdown-item" >{{ __($locale) }}</p>

      @endforeach
    </div>
  </div> --}}
  <div class="mb-2">

    <p>{{$language}}</p>
    <select name="" wire:model.live='language' id="" class="form-select form-select-sm border-0  mt-0" style="background-color: white; color:#bb95dc">
        {{-- <option value="">@if(session()->get('localization') === "en") English @else Burmese @endif</option> --}}
        {{-- @foreach (config('localization.locales') as $locale) --}}
        <option value="">Choose Languages</option>
        <option  value="en" >@if(session()->get('localization') === "en") <i class="fa-solid fa-check me-1"></i>  @endif English </option>
        <option  value="my" >@if(session()->get('localization') === "my") <i class="fa-solid fa-check me-1"></i>  @endif Burmese </option>

        {{-- @endforeach --}}
    </select>

    {{-- <input type="text" wire:bind.live='language' value="{{ __($locale) }}"> --}}
    

  </div>