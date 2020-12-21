<?php

namespace App\Http\Controllers\Dichvu;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateFormHymnal;
use App\Http\Requests\ValidateFormHymnalupdate;
use App\Models\Hymnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HymnalController extends Controller
{
    public function index(Request $request)
    {
        $hymnal = Hymnal::paginate(5);
        if ($request->ajax()) {
            return view('admin.hymnal.index', compact('hymnal'));
        }
        return view('admin.hymnal.pagination', compact('hymnal'));
    }


    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $hymnal = DB::table('hymnals')
                ->orWhere('code', 'like', '%' . $request->search . '%')
                ->orWhere('name', 'like', '%' . $request->search . '%')
                ->orderBy('id', 'desc')
                ->get();
            if ($hymnal) {
                foreach ($hymnal as $key => $hymnals) {

                    $output .= '
                                                       <tr>
                                                        <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">' . $hymnals->code . '</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">' . $hymnals->name . '</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">' . $hymnals->start_hour . '</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">' . $hymnals->end_hour . '</td>
                                                            <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">' . $hymnals->describe . '</td>
                                                       
                                                    </tr>';
                }
                return Response($output);
            }
        }
    }

    public function add()
    {
        return view('admin.hymnal.add');
    }

    public function store(ValidateFormHymnal $request)
    {
        $code = substr(md5(microtime('WO')), rand(0, 26), 5);
        DB::beginTransaction();
        Hymnal::create([
            'code' => $code,
            'name' => $request->name,
            'start_hour' => $request->start_hour,
            'end_hour' => $request->end_hour,
            'describe' => $request->describe
        ]);
        DB::commit();
        Alert()->success('thành công', 'thêm ca tập thành công');
        return redirect()->route('hymnal.index');
    }

    public function edit($id)
    {
        $hymnal = Hymnal::where('id', $id)->get();
        return view('admin.hymnal.edit', compact('hymnal'));
    }

    public function update(ValidateFormHymnalupdate $request, $id)
    {
        DB::beginTransaction();
        Hymnal::where('id', $id)->update([
            'name' => $request->name,
            'start_hour' => $request->start_hour,
            'end_hour' => $request->end_hour,
            'describe' => $request->describe
        ]);
        DB::commit();
        Alert()->success('thành công', 'Cập nhật ca tập thành công');
        return redirect()->route('hymnal.index');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        Hymnal::where('id', $id)->delete();
        DB::commit();
        Alert()->success('thành công', 'Xóa ca tập thành công');
        return redirect()->route('hymnal.index');
    }
}