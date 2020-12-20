namespace Kelechukw\Calculator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CC extends Controller
{
    //
   	public function multiply($a, $b){
		$result = $a * $b;
		return view('calculator::multiply', compact('result'));
	}

 
}
© 2020 GitHub, Inc.
