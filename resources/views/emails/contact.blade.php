Name: {{ $data->name }}<br>
Emailadresse: {{ $data->email }}<br><br>
@if($data->subject)
	Gegenstand: <br>{{ $data->subject }}
@endif
Nachricht: <br>{{ $data->message }}