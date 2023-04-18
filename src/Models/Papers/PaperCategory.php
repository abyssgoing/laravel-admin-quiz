<?php

namespace Encore\Admin\Models\Papers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaperCategory extends Model
{

	protected $connection= 'old_tiku'; 

	protected $table = 'paper_category';
}
