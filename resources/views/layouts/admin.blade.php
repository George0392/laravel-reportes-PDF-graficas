@include('layouts.header')
@include('layouts.aside')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 {{--  <section class="content-header">
    <h1>
      Sistema para Control de Inventario ( Sistema Aurora Empresarial )

    </h1>

  </section> --}}
  <!-- Main content -->
  <section class="content container-fluid">

@if (session('info'))
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
            </div>
        </div>
    </div>
    @endif

    @yield('contenido')
    <!--------------------------
    | Your Page Content Here |
    -------------------------->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layouts.footer')
