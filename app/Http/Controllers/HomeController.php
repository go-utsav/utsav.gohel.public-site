use App\Models\Testimonial;

public function index()
{
    $testimonials = Testimonial::orderBy('display_order')
        ->take(3)
        ->get();
        
    return view('frontend.pages.home', compact('testimonials'));
} 