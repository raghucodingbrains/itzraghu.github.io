@include('layouts.header')

<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! Html::link('/','eVoting',array('class'=>'navbar-brand')) !!}
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>{!! Html::link('feature','Features',array('class'=>'nav-link')) !!}</li>
        <li>{!! Html::link('login','Cast Your Vote',array('class'=>'nav-link')) !!}</li>
        <li>{!! Html::link('voter-registration','Be voter',array('class'=>'nav-link')) !!} </li>
        <li>{!! Html::link('election-status','Election Status',array('class'=>'nav-link')) !!}</li>
        <li>{!! Html::link('voter-list','Voter List',array('class'=>'nav-link')) !!}</li>
        <li>{!! Html::link('logout','Logout',array('class'=>'nav-link')) !!}</li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="page-header">
  <h1 class="text-center text-danger">Voter List</h1>
</div>
<div class="container">
 <div class="table-responsive">   
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Voters</h3>
        </div>
        <div class="panel-body">

          <table class="table table-striped">
            <tr>
              <th>Name</th>
              <th>Voter Id</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Area</th>
            </tr>
            @foreach($voters as $voter)
            <tr>
              <td>{{ $voter->name }}</td>
              <td>{{ $voter->voter_id }}</td>
              <td>{{ $voter->email }}</td>
              <td>{{ $voter->gender }}</td>
              <td>{{ $voter->location }}</td>
            </tr>
            @endforeach
          </table>

        </div>
      </div>
      {!! $voters->render()!!}
    </div>
  </div>
</div>
</div>



@include('layouts.footer')
