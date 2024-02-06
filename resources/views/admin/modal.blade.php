
<div class="col-lg-4 col-md-6 col-12 offset-lg-3"  x-data = "{open:false}"
 x-show="open"
  x-on:open-modal.window="open =true"
   x-on:close-modal.window="open =false"
   x-on:keydown.escape.window="open=false"
   x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
   style="margin: auto">
       

    <!-- Modal -->
    <div class=" fade show" id="basicModal" tabindex="-1" style="position: absolute; top:0;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              @click="$dispatch('close-modal')"
            ></button>
          </div>
          <div class="modal-body text-center  pb-0">
            <div class="row">
              <div class="col">
              
                <p>{{$text}}</p>
              </div>
            </div>
            
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"  @click="$dispatch('close-modal')">
              No
            </button>
            
            <button type="submit" class="btn btn-primary" @click="$dispatch('close-modal'); $wire.delete()">Yes</button>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>