@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">แก้ไขรายละเอียดกำลังพล</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('users.update', $user->id)}}" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">ชื่อ:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">อีเมล์:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">รหัสผ่าน</label>
            <b-radio-group v-model="password_options">
              <div class="field">
                <b-radio name="password_options" value="keep">รหัสผ่านเดิม</b-radio>
              </div>
              <div class="field">
                <b-radio name="password_options" value="auto">สร้างรหัสผ่านแบบสุ่ม</b-radio>
              </div>
              <div class="field">
                <b-radio name="password_options" value="manual">สร้างรหัสผ่านใหม่ด้วยตนเอง</b-radio>
                <p class="control">
                  <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="สร้างรหัสผ่านใหม่ด้วยตนเอง">
                </p>
              </div>
            </b-radio-group>
          </div>
        </div> <!-- end of .column -->

        <div class="column">
          <label for="roles" class="label">บทบาทหน้าที่:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />

            @foreach ($roles as $role)
              <div class="field">
                <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
              </div>
            @endforeach
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">แก้ไขข้อมูล</button>
        </div>
      </div>
    </form>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  <script>

    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });

  </script>
@endsection
