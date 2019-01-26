<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class HomeController extends Controller
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
        $result = $this->CQUERY->getEntriesByContentType('homePage');

        if (count($result) == 0) {
            abort(404);
        }

        $page = $result[0];
        $headless_img = $this->CQUERY->getAsset('n0utBXd2zRAIRlfBCIN0z');

        $data = [
            'page'      => $page,
            'hero_img'  => $headless_img,
            'services'  => $page->services,
        ];

        return view('pages.index', $data);
    }
}
