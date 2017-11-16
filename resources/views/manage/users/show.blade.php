@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">แสดงรายละเอียดกำลังพล</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> แก้ไขข้อมูลกำลังพล</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" class="label">ชื่อ</label>
          <pre>{{$user->name}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">อีเมล์</label>
            <pre>{{$user->email}}</pre>
          </div>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">บทบาทหน้าที่</label>
            <ul>
              @forelse ($user->roles as $role)
                <li>{{$role->display_name}} ({{$role->description}})</li>
              @empty
                <p>ยังไม่ได้รับมอบหมายบทบาทใด ๆ</p>
              @endforelse
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
