<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class AboutController extends Controller
{
    /**
     * @var CQuery
     */
    private $CQUERY;

    public function __construct(CQuery $query)
    {
        $this->CQUERY = $query;
    }

    public function index()
    {
        $entry = $this->CQUERY->getEntriesByContentType('aboutPage', 1);

        if (count($entry) <= 0) {
            abort(404);
        }

        return view('about.index', [
            'entry' => $entry[0],
        ]);
    }

    public function show($person_name)
    {
        // TODO
    }
}
