<x-app-layout>
  <div class="tw-container tw-mx-auto tw-p-6 tw-bg-gray-900 tw-rounded-lg">
    <h1 class="tw-text-3xl tw-font-bold tw-text-white">{{ isset($driver) ? 'Edit Driver' : 'Tambah Driver' }}</h1>
    <form action="{{ isset($driver) ? route('drivers.update', $driver) : route('drivers.store') }}" method="POST" class="tw-mt-6">
      @csrf
      @if(isset($driver))
        @method('PUT')
      @endif

      <!-- Full Name -->
      <x-input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" required value="{{ $driver->fullname ?? old('fullname') }}" />

      <!-- Phone Number -->
      <x-input type="text" name="phone_number" id="phone_number" placeholder="Nomor Telepon" required value="{{ $driver->phone_number ?? old('phone_number') }}" />

      <!-- Email -->
      <x-input type="email" name="email" id="email" placeholder="Email" required value="{{ $driver->email ?? old('email') }}" />

      <!-- Submit -->
      <button type="submit" class="tw-bg-blue-600 tw-text-white tw-px-4 tw-py-2 tw-rounded hover:tw-bg-blue-500 tw-mt-4">
        {{ isset($driver) ? 'Update Driver' : 'Tambah Driver' }}
      </button>
    </form>
  </div>
</x-app-layout>
