<div >
    
        <form wire:submit.prevent="updatePassword">
            
            <table class="table">
                <tr>
                    <td><label for="" class="">{{__('form.Old')}} password</label></td>
                    <td>:</td>
                    <td>
                        <input type="password" wire:model='currentPassword' name="" id=""
                        class="form-control form-control-md mb-2 border-0 shadow-sm">
                        @error('currentPassword')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
              
                <tr>
                    <td><label for="" class="">{{__('form.New')}} Password</label></td>
                    <td>:</td>
                    <td>
                        <input type="password" wire:model='newPassword' name="" id=""
                        class="form-control form-control-md mb-2 border-0 shadow-sm">
                        @error('newPassword')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="">{{__('form.Confirm')}} Password</label></td>
                    <td>:</td>
                    <td>
                        <input type="password" wire:model='confirmPassword' name="" id=""
                        class="form-control form-control-md mb-2 border-0 shadow-sm">
                        @error('confirmPassword')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td  class="text-center border-0 d-flex justify-content-center">
                        <button type="" class="btn btn-primary me-2  d-flex align-items-center"
                            style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                            <div>Update</div>

                            <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                       
                    </td>
                    
                   
                </tr>
            </table>




        </form>
    
</div>
