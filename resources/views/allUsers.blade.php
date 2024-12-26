<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-black-500 dark:text-black-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Section
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    CGPA
                </th>
                <th scope="col" class="px-6 py-3">
                    Department
                </th>
                <th scope="col" class="px-6 py-3">
                    Update
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stack as $id)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                    {{$id->Id}}
                </th>
                <td class="px-6 py-4">
                    {{$id->Name}}
                </td>
                <td class="px-6 py-4">
                    {{$id->Section}}
                </td>
                <td class="px-6 py-4">
                    {{$id->Email}}
                </td>
                <td class="px-6 py-4">
                    {{$id->CGPA}}
                </td>
                <td class="px-6 py-4">
                    {{$id->Department}}
                </td>
                 <td class="">
                    <a href="{{route('updateUser',$id->Id)}}" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Update</a>
                </td>
                <td class="">
                    <a href="{{route('deleteUser',$id->Id)}}" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Delete</a>
                </td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="pagination px-2 d-flex justify-content-around mt-5">
    {{$stack->links('pagination::bootstrap-5')}}
</div>

</body>
</html>