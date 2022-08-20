<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Regulatory Check Submission</h2>
      <p class="mb-4">submit your request to check whether your innovation meets the EU Regulatory issues</p>
    </header>
  
    <div>
    <h1>  Hello {{auth()->user()->name}} thank you for submiting your request, as we process your submission </h1>
    <h1> <a href="https://eur-lex.europa.eu/legal-content/EN/TXT/?uri=celex%3A31993L0042" style="color: blue"> Download the latest EU Medical device directive here </a></h1>
    </div>
    <div>
    <a href="https://docs.google.com/forms/d/1ZxM8_qqW6WJJZd4OAVVwKMOlcsHXMB41JPyQ2JmkEQk/edit" style="color: red" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Check Medical device Class</a>
    </div>
  
  
     
    
  </x-card>
</x-layout>
