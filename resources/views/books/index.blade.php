<x-layout title="ページネーション">
    <x-layout.single>

        <div class="m-4">
            {{ $booksPaginate->links() }}
        </div>

        <hr/>
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
