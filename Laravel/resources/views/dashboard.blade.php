<x-app-layout>
    <x-slot name="header">
        <h2 class="font-m text-xl text-gray-800 ">
            {{ __('Silahkan masukkan daftar pesanan anda') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-2/3">
                <div class="flex flex-wrap p-6 bg-white border-b border-gray-200 border-b-2">
                    <div>
                    <form action="formulir.php" method="post">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="py-3 pr-4">Nama Pemesan</td>
                                    <td>
                                        <input type="text" name="nama" value="" placeholder="Masukkan nama anda">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 pr-4">Jenis Kelamin</td>
                                    <td>
                                        <select name="gender" class="w-36">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-3 pr-4">NIK</td>
                                    <td>
                                        <input type="text" name="nik" value="" placeholder="Masukkan NIK anda">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                    <div class="pl-8 -pt-10">
                        <tr>
                            <td>Alamat</td>
                            <td>
                            <textarea textarea name="alamat"  placeholder="Alamat"></textarea>
                            </td>
                         </tr>
                    </div>
                </div>
                <h1 class="font-thin p-6 text-3xl">Guest</h1>
                    <div class="flex flex-wrap">
                    <div class="pl-6">
                    <form action="formulir.php" method="post">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pb-3 pr-4">Nama</td>
                                            <td>
                                                <input type="text" name="nama2" value="" placeholder="Masukkan nama anda">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 pr-4">Jenis Kelamin</td>
                                            <td>
                                                <select name="gender" class="w-36">
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 pr-4">Alergi</td>
                                            <td>
                                                <input type="text" name="nik" value="" placeholder="Masukkan NIK anda">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </form>                    
                    </div>
                    <div class="pl-40 -pt-10">
                        <h1>Tambahkan</h1>
                        <tr>
                            <td>
                            <p><input type='checkbox' name='Asuransi' value='ada' />Asuransi</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><input type='checkbox' name='BreakFast' value='ada' />Breakfast</p>
                            </td>
                        </tr>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
