@section('title', 'メモ編集')

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form action="{{ route('memo.update', ['id' => $id, 'day' => $day]) }}" method="post">
                    @csrf
                    @method('patch')
                    <p class="text-gray-700 mb-4 text-xl">{{ $date }}のメモを編集します。</p>
                    <!-- エラーメッセージ -->
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-600">{{ $error }}<li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- メモの登録が無い場合 -->
                    @if (empty($memo))
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-3/5" 
                    type="text" name="habit_memo">
                    <!-- メモの登録がある場合 -->
                    @else
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-3/5" 
                    type="text" name="habit_memo" value="{{ old('habit_memo', $memo->text) }}">
                    @endif
                    <div class="mt-5">
                        <x-primary-button>登録</x-primary-button>
                    </div>
                </form>
            </div>
    </div>
</x-app-layout>
            