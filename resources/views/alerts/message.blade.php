@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert-toast fixed top-0 right-0 mt-20 w-5/6 md:w-full max-w-sm">
    <input type="checkbox" class="hidden" id="footertoast">
    <label class="close cursor-pointer flex items-start justify-between w-full bg-red-100 border-l-4 border-red-500 text-red-700 p-4" title="close" for="footertoast">
        <p class="font-bold">{{ $error }}</p>    
        
      <svg class="fill-current text-red-700" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
    </label>
</div>
@endforeach
@endif

@if (session('success'))
<div class="alert-toast fixed top-0 right-0 mt-20 w-5/6 md:w-full max-w-sm">
    <input type="checkbox" class="hidden" id="footertoast">
    <label class="close cursor-pointer flex items-start justify-between w-full bg-green-100 border-l-4 border-green-500 text-green-700 p-4" title="close" for="footertoast">
        <p class="font-bold">{{session ('success') }}</p>    
        
      <svg class="fill-current text-green-700" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
    </label>
</div>
@endif

@if (session('error'))
<div class="alert-toast fixed top-0 right-0 mt-20 w-5/6 md:w-full max-w-sm">
    <input type="checkbox" class="hidden" id="footertoast">
    <label class="close cursor-pointer flex items-start justify-between w-full bg-red-100 border-l-4 border-red-500 text-red-700 p-4" title="close" for="footertoast">
        <p class="font-bold">{{session ('error') }}</p>    
        
      <svg class="fill-current text-red-700" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
    </label>
</div>
@endif