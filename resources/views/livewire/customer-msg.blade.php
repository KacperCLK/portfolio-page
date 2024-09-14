<form class="customer-msg" wire:submit.prevent="submitForm">
    <div class="row ">
        <div class="col-1-of-2">
            <label for="visitor_name" class="customer-msg__label">{{__('Name')}}</label>
            <input type="text" class="customer-msg__input @error('visitor_name') is-invalid @enderror" id="visitor_name" wire:model="visitor_name" placeholder="{{strtoupper(__('Name'))}}">
        </div>
        <div class="col-1-of-2">
            <label for="visitor_email" class="customer-msg__label">{{__('Email')}}</label>
            <input type="email" class="customer-msg__input @error('visitor_email') is-invalid @enderror" id="visitor_email" wire:model="visitor_email" placeholder="{{strtoupper(__('Email'))}}">
        </div>
    </div>
    
    <div class="row">
        <label for="visitor_msg" class="customer-msg__label">{{__('Message')}}</label>
        <textarea class="customer-msg__textarea @error('visitor_msg') is-invalid @enderror" id="visitor_msg" rows="7" wire:model="visitor_msg" placeholder="{{__('YOUR MESSAGE')}}"></textarea>
    </div>
    
    <div class="row">
        <div class="customer-msg__captcha col-1-of-2">CAPTCHA</div>
        <div class="col-1-of-2">
            <button id="submitButton" class="button-main" type="submit">
                {{__('SEND')}}
            </button>
        </div>
    </div>

    <div id="successMessage">
        <div class="customer-msg__successMessage">
            {{ $successMessage }}
        </div>
    </div>
</form>