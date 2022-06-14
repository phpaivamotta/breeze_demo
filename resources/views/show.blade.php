<!DOCTYPE html>
<html lang="en">

    <body>

        <div>

            <div>
                <h1>{{ $job->title }}</h1>
                <ul>
                    <li>{{$job->country}}</li>
                    <li>{{$job->city}}</li>
                    <li>{{$job->salary}}</li>
                </ul>   
            </div>

            <div class="">
                <p> {{ $job->description }} </p>
            </div>

        </div>

    </body>

</html>