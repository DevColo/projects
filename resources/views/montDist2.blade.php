<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<style type="text/css">
		table{
      width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    line-height: 20px;
    }
    th{
      border-bottom-width: 2px;
    border: 1px solid #dddddd;
    padding: 2px;
    line-height: 1.428571;
    text-align: center;
    font-size: 14px;
    font-family: system-ui;
    font-weight: 500;
    color: #525252;border-bottom-width: 2px;
    border: 1px solid #dddddd;
    padding: 2px;
    line-height: 1.428571;
    text-align: left;
    font-size: 14px;
    font-family: system-ui;
    font-weight: 700;
    color: #525252;
    }
    td {
    border: 1px solid #dddddd;
    padding: 6px;
    line-height: 1.428571;
    text-align: center;
    font-family: sans-serif;
    color: #525252;
    font-size: 14px;
}
	</style>
</head>
<body>
	<div style="width:100%; height: 100px;background:#fff;margin-bottom: 20px;">

		<img src="images/cdc.jpeg" width="85px" style="float:left;margin-top:-12px;position:relative;">
				<img src="images/Montserrado.jpg" width="110px" style="float:right;">
				<h3 style="text-align:center;position:relative;margin-top:-5px;font-family:sans-serif;">Coalition For Democratic Change ( C.D.C )</h3>
				<h4 style="text-align: center;font-family:;margin-top:-8px;">Republic of Liberia</h4>
			<div style="margin-top:-5px;">	<p style="text-align: center;text-decoration:underline;">Montserrado County Dist.#2 Rooster</p></div>

	</div>
  <table>
  <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Sex</th>
        <th>Voter ID</th>
        <th>Age</th>
        <th>County</th>
        <th>District</th>
        <th>Cell</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($member as $key => $member)
         <tr style="background-color: rgb(243 243 244 / 0.42);">
          <td>{{$member->member_id}}</td>
          <td>{{$member->fname}}</td>
          <td>{{$member->lname}}</td>
          <td>{{$member->gender}}</td>
          <td>{{$member->voterID}}</td>
          <td>{{$member->age}}</td>
          <td>{{$member->county}}</td>
          <td>{{$member->district}}</td>
          <td>{{$member->cell}}</td>
          <td>{{$member->email}}</td>
         </tr>
  		@endforeach
  	</tbody>
  </table>
</body>
</html>