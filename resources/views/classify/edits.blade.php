<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit check</h2>
      <p class="mb-4">Edit: {{$check->innovation}}</p>
    </header>

    <form method="POST" action="/classify/{{$check->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="computer_prog" class="inline-block text-lg mb-2">Company Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="computer_prog"
          value="{{$check->computer_prog}}" />

        @error('computer_prog')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="embeded_device" class="inline-block text-lg mb-2">Job Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="embeded_device"
          placeholder="Example: Senior Laravel Developer" value="{{$check->embeded_device}}" />

        @error('embeded_device')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="standalone" class="inline-block text-lg mb-2">Job Location</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="standalone"
          placeholder="Example: Remote, Boston MA, etc" value="{{$check->standalone}}" />

        @error('standalone')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="act_defferent" class="inline-block text-lg mb-2">
          Contact Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="act_defferent" value="{{$listing->act_defferent}}" />

        @error('act_defferent')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="patient_benefit" class="inline-block text-lg mb-2">
          Website/Application URL
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="patient_benefit"
          value="{{$check->patient_benefit}}" />

        @error('patient_benefit')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="purpose_sec_12a" class="inline-block text-lg mb-2">
          Tags (Comma Separated)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$purpose_sec_12a->tags}}" />

        @error('purpose_sec_12a')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="accesssory" class="inline-block text-lg mb-2">
        Is it an accessory of a medical device?

        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="accesssory"
        placeholder="Yes, No" value="{{$check->accesssory')}}" />

        @error('accesssory')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Update check
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout><
