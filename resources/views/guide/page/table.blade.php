  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="@if(Auth::user()->utype == 'admin')
                    {{ route('admin.dashboard') }}
                    @elseif(Auth::user()->utype == 'guide')
                    {{ route('guide.dashboard') }}
                    @else
                    {{ route('dashboard') }}
                    @endif">Home</a></li>
              <li class="breadcrumb-item active">Guide for order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>tour date</th>
                    <th>Tour Place</th>
                    <th>Details</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    use   App\Models\booking;
                    use App\Models\User;
                    $id = Auth::user()->id;
                    $bookings = booking::where('guide_user_id', $id)->where('status', 1)->get(); 
                    @endphp

                    @foreach($bookings as $booking)
                    @php
                    $tour = App\Models\Tour::find($booking->tour_id);
                    @endphp
                  <tr>
                    <td>
                      @php
                      $id = $booking->user_id;
                      $users = User::where('id', $id)->get(); 
                      @endphp
                      @foreach($users as $user)
                      {{$user->name}}
                      @endforeach
                    </td>
                    <td>
                    @if (!empty($booking->tour_date_one))
                     {{$booking->tour_date_one}} <br>
                    @endif
                    @if (!empty($booking->tour_date_two))
                     {{$booking->tour_date_two}} <br>
                    @endif
                    @if (!empty($booking->tour_date_three))
                     {{$booking->tour_date_three}} <br>
                    @endif
                    @if (!empty($booking->tour_date_four))
                     {{$booking->tour_date_four}} <br>
                    @endif
                    @if (!empty($booking->tour_date_five))
                     {{$booking->tour_date_five}} <br>
                    @endif
                    @if (!empty($booking->tour_date_six))
                     {{$booking->tour_date_six}} <br>
                    @endif
                    @if (!empty($booking->tour_date_seven))
                     {{$booking->tour_date_seven}} <br>
                    @endif
                    @if (!empty($booking->tour_date_eight))
                     {{$booking->tour_date_eight}} <br>
                    @endif
                    @if (!empty($booking->tour_date_nine))
                     {{$booking->tour_date_nine}} <br>
                    @endif
                    @if (!empty($booking->tour_date_ten))
                     {{$booking->tour_date_ten}} <br>
                    @endif
                    </td>
                    <td>
                      {{$tour->title}}
                    </td>
                    <td>
                      <a href="/guide/order/{{$booking->user_id}}/show"> <i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  @endforeach            
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>tour date</th>
                    <th>Tour Place</th>
                    <th>Details</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->