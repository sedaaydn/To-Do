@extends('home')
@section('content')

<!-- Page Wrapper -->
<div class="container" id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Görev Başlığı</th>
                                        <th>Görev</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($liste as $list)
                                    <tr>
                                        <td>{{$list->title}}</td>
                                        <td>{{$list->description}}</td>
                                        <td>
                                            <form class="container" action="{{ route('post.destroy', $list->id) }}" method="POST">
                                                <a class="fas fa-edit" type="submit" href="{{ route('post.edit', $list->id) }}"></a>
                                                @csrf
                                                @METHOD('DELETE')
                                                <input class="btn btn-danger" type="submit" value="Sil">
                                            </form>
                                        </td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@endsection
