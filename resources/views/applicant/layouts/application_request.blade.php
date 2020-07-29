<thead>
<tr>
    <th>#</th>
    <th>Business Name</th>
    <th>Applicant</th>
    <th>Entity Type</th>
    <th>Business Type</th>
    <th>Status</th>
    <th>Comment</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
@foreach($applications as $application)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $application->businessDetail->name }}</td>
        <td>{{ $application->applicantDetail->first_name." ".$application->applicantDetail->last_name }}</td>
        <td>{{ $application->entityType->name }}</td>
        <td>{{ $application->businessType->name }}</td>
        <td>
            @if($application->status)
                @if ($application->applicationStatus->is_accepted)
                    <span class="badge badge-success">Accepted</span>
                @else
                    <span class="badge badge-danger">Rejected</span>
                @endif

            @else
                <span class="badge badge-soft-dark">Pending</span>
            @endif
        </td>
        <td>{{ $application->comment == null?"No Comment": $application->comment }}</td>
        <td style="text-align:center">
            @if($application->status)
                @if ($application->applicationStatus->is_accepted)
                    <a type="button" class="btn btn-light btn-sm waves-effect waves-light">View</a>
                @else
                    <a type="button" class="btn btn-warning btn-sm waves-effect waves-light">Appeal</a>
                @endif

            @else
                <a type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</a>
                <a type="button" class="btn btn-danger btn-sm waves-effect waves-light">Cancel</a>
            @endif
        </td>
    </tr>
@endforeach
</tbody>
