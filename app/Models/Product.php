<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
   
    { 
        use HasFactory;
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'product';
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name',
            'price',
            'description',
            'origin',
            'type',
            'brand',
            'color',
            'weight',
            'quantity',
            'image',
            'sale',
            'sale_percentage',
            'additional_info',
        ];
    
        /**
         * Get the product type.
         */
        public function type()
        {
            return $this->belongsTo(ProductType::class, 'type');
        }
    
        /**
         * Get the product brand.
         */
        public function brand()
        {
            return $this->belongsTo(ProductBrand::class, 'brand');
        }
    }