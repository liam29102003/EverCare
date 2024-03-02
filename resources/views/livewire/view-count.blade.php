<li class="menu-item ">
    <a href="{{ route('contact.messages') }}" wire:navigate  class="menu-link {{ request()->segment(2) === 'contact' ? 'select' : '' }}" style="      color:white ;
    border-bottom: 3px solid #9d926aa;">
        <i class="fa-solid fa-coins me-3"></i>
      <div data-i18n="Analytics">Messages <button class="btn btn-sm btn-danger">{{$count}}</button></div>
    </a>
  </li>