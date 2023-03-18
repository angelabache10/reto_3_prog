<x-layout.app :title="$title" :extra="$extra ?? null">
  <main class="content-wrapper">
    <x-layout.title>
      {{ $title }}
      <x-slot name="breadcrumbs">{{ $breadcrumbs ?? '' }}</x-slot>
      <x-slot name="titleAddon">{{ $titleAddon ?? '' }}</x-slot>
    </x-layout.title>
    {{ $slot }}
  </main>
</x-layout.app>