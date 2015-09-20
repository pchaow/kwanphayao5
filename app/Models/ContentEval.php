<?php namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\SoftDeletes;

class ContentEval extends AbstrctIModel
{

    use SoftDeletes;
    protected $connection = 'neo4j';
    protected $label = ['ContentEval'];
    protected $fillable = [
        'firstname','lastname','age','graduation','job','position','department',
        'eval_1', 'eval_2', 'eval_3', 'eval_4', 'eval_5', 'eval_6', 'eval_7', 'eval_8', 'eval_9',];

    /*
     * Eval 1-9
     * 1. ความถูกต้องของเนื้อหา
     * 2. ความทันสมัยของเนื้อหา
     * 3. การแบ่งหมวดหมู่ของเนื้อหา
     * 4. ความสมบูรณ์ของเนื้อหา
     * 5. ความเหมาะสมในการจัดเรียงลำดับเนื้อหา
     * 6. ความเหมาะสมของปริมาณเนื้อหา
     * 7. ความเหมาะสมของภาษาที่ใช้
     * 8. ภาพประกอบสื่อความหมายตรงกับเนื้อหา
     * 9. เนื้อหาเหมาะสมกับกลุ่มเป้าหมาย
     *
     * มากที่สุด = 5
     * น้อยที่สุด = 1
     *
     * */

    public function user()
    {
        return $this->belongsTo("App\Models\User","created_eval");
    }

    public function content()
    {
        return $this->hasOne("App\Models\Content","evaluated_this");
    }


}
