<x-layout title="ページネーション">
    <x-layout.single>
        <h1 class="text-4xl mt-4">Paginate</h1>
        <div class="m-4">
            {{ $booksPaginate->links() }}
        </div>

        <hr class="m-4"/>
        <h1 class="text-4xl mt-4">Simple Paginate</h1>
        <div class="m-4">
            {{ $booksSimplePaginate->links() }}
        </div>

    </x-layout.single>
</x-layout>

<style>
    .m-4 {
        margin: 20px;
    }
</style>
