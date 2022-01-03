<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        
        <th><b>Use Case Reference</b></th>
        <td><b>Test Case Title</b></td>
        <th><b>Test Case Description</b> </th>
        <th><b>Test Steps</b></th>
        <th><b>Test Data</b></th>
        <th><b>Expected result</b></th>
        <th><b>Actual result</b></th>
        <th><b>Status (Passed/Failed)</b></th>
        <th><b>User Acceptance Validation (Yes/No)</b></th>
    </tr>
    </thead>
    <tbody>
    @foreach($testcases as $testcase)
        <tr>
            <td>A{{sprintf("%03d", $testcase->reference)}}</td>
            <td>{{ $testcase->title}}</td>
            <td>{{ $testcase->short_description }}</td>
            <td>{{ $testcase->test_steps }}</td>
            <td>{{ $testcase->test_data }}</td>
            <td>{{ $testcase->expected_result }}</td>
            <td>{{ $testcase->actual_result }}</td>
            <th>@if($testcase->done==0)failed @else passed @endif</th>
            <th></th>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
