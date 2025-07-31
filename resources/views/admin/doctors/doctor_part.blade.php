<table class="table">
    <thead>
    <th>Ім'я</th>
    <th>Статус</th>
    <th>Дії</th>
    </thead>
    <tbody>
    @if(empty($department))
        @foreach($departments->first()->doctors as $doctor)
            <tr>
                <td>{{ $doctor->admin_translation('uk')->second_name ?? '' }} {{ $doctor->admin_translation('uk')->first_name ?? '' }} {{ $doctor->admin_translation('uk')->middle_name ?? '' }}</td>
                <td>@if($doctor->is_visible == '1')<span class="badge rounded-pill bg-label-success">Відображається</span>@else<span class="badge rounded-pill bg-label-warning">Не відображається</span>@endif</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('admin.doctor.edit', ['id' => $doctor->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    @else
        @foreach($department->doctors as $doctor)
            <tr>
                <td>{{ $doctor->admin_translation('uk')->second_name ?? '' }} {{ $doctor->admin_translation('uk')->first_name ?? '' }} {{ $doctor->admin_translation('uk')->middle_name ?? '' }}</td>
                <td>@if($doctor->is_visible == '1')<span class="badge rounded-pill bg-label-success">Відображається</span>@else<span class="badge rounded-pill bg-label-warning">Не відображається</span>@endif</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('admin.doctor.edit', ['id' => $doctor->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
