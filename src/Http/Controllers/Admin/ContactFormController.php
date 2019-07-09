<?php
// MyVendor\Contactform\src\Http\Controllers\Admin\ContactFormController.php
    namespace Discuss\Contactform\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Discuss\Contactform\Models\ContactForm;

    class ContactFormController extends Controller {

        public function index()
        {
           return view('contactform::index');
        }

        public function sendMail(Request $request)
        {
            ContactForm::create($request->all());

            //return redirect(route('contact'));

            return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
        }


    }