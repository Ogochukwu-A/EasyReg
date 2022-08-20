<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Regulatory Check Submission</h2>
      <p class="mb-4">Submit your request to check whether your innovation meets the EU Regulatory issues</p>
    </header>

    <form method="POST" action="/classify" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="innovation" class="inline-block text-lg mb-2">Name of the Medical device/software</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="innovation"
         value="{{old('innovation')}}" />

        @error('computer_prog')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="computer_prog" class="inline-block text-lg mb-2">Is the Medical software a computer program?</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="computer_prog"
        placeholder="Yes, No" value="{{old('computer_prog')}}" />

        @error('computer_prog')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="embeded_device" class="inline-block text-lg mb-2"> Is the medical device's software an essential component?</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="embeded_device"
        placeholder="Yes, No" value="{{old('embeded_device')}}" />

        @error('embeded_device')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="standalone" class="inline-block text-lg mb-2"> Is it a standalone software ? </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="standalone"
        placeholder="Yes, No" value="{{old('standalone')}}" />

        @error('standalone')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="act_defferent" class="inline-block text-lg mb-2"> Does the software perform an action on the data different form storing, archival, communiaction or search? </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="act_defferent"
        placeholder="Yes, No" value="{{old('act_defferent')}}" />

        @error('act_defferent')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="patient_benefit" class="inline-block text-lg mb-2">
        Is it designed for the benefit of individual patient ?
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="patient_benefit" placeholder="Yes, No" value="{{old('patient_benefit')}}" />

        @error('patient_benefit')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="purpose_sec_12a" class="inline-block text-lg mb-2">
        Is the action for medical purposes?
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="purpose_sec_12a"
        placeholder="Yes, No" value="{{old('purpose_sec_12a')}}" />

        @error('purpose_sec_12a')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="accesssory" class="inline-block text-lg mb-2">
        Does the software control, track, or have any impact on how a medical device is used?

        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="accesssory"
        placeholder="Yes, No" value="{{old('accesssory')}}" />

        @error('accesssory')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Submit Check
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
