<?phpnamespace App;use Illuminate\Database\Eloquent\Model;class Post extends Model{    protected $fillable = [        'id','title','path','description','content' ,'image','isActive','seo_title','seo_description','seo_keywords','post_type','user_id','created_at','updated_at'    ];    public function users()    {        return $this->belongsTo('App\User', 'user_id');    }    public function categoryitem(){        return $this->belongsTo('App\CategoryItem','post_type');    }}