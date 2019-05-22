<?php

class Publicmodel extends CI_Model
{

    /* here i add table translation to database so it translate seo text language abbrevation->parameter $abbr(determinethe lang entered ex EN or Ar) and $type (determin the what page this text belong to is it for homepage ,) */
    public function getSeo($page)
    {
        $this->db->where('type', $page);
        $this->db->where('abbr', MY_LANGUAGE_ABBR);
        $query = $this->db->get('translations');
        $arr = array();
        if ($query !== false) {
            foreach ($query->result_array() as $row) {
                $arr['title'] = $row['title'];
                $arr['description'] = $row['description'];
            }
        }
        return $arr;
    }
    public function login($username,$password)
{
    $this->db->where('username', $username);
    $this->db->where('password', md5($password));
    $res = $this->db->get('member_tbls');
    return $res->num_rows();

}public function getDynPagesLangs($dynPages)
{
    if (!empty($dynPages)) {
        $this->db->join('translations', 'translations.for_id = active_pages.id', 'left');
        $this->db->where_in('active_pages.name', $dynPages);
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'page');
        $result = $this->db->select('translations.name as lname, active_pages.name as pname')->get('active_pages');
        $ar = array();
        $i = 0;
        foreach ($result->result_array() as $arr) {
            $ar[$i]['lname'] = $arr['lname'];
            $ar[$i]['pname'] = $arr['pname'];
            $i++;
        }
        return $ar;
    } else
        return $dynPages;
}


public function getOneLanguage($myLang)
{
    $this->db->select('*');
    $this->db->where('abbr', $myLang);
    $result = $this->db->get('languages');
    return $result->row_array();
}
public function getCategories()
{
    $this->db->select('category_tbls.parent_id, category_tbls.id,translations.name');
    $this->db->where('abbr', MY_LANGUAGE_ABBR);
    $this->db->where('type', 'category_id');
    $this->db->join('category_tbls', 'category_tbls.id = translations.for_id', 'INNER');
    $query = $this->db->get('translations');
    $arr = array();
    if($query !== false){
        foreach ($query->result_array() as $row){
            $arr[] = $row;
        }
        return $arr;
    }
}

public function getads($limit = null, $start = null, $big_get)
    {
        if ($limit !== null && $start !== null){
            $this->db->limit($limit, $start);

        }
        if (!empty($big_get) && isset($big_get['category'])){
            $this->getFilter($big_get);
        }
        $this->db->select('ads_tbls.id, ads_photo_tbls.image,translations.title, ads_tbls.origin_price, ads_tbls.new_price, ads_tbls.url');
        $this->db->join('translations', 'translations.for_id = ads_tbls.id', 'left');
        $this->db->join('ads_photo_tbls', 'ads_photo_tbls.ads_id = ads_tbls.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');
        $this->db->where('use_status_id',1);
        $query = $this->db->get('ads_tbls');
        return $query->result_array();
        
    }
    public function adsCount($big_get)
    {
        $this->db->join('translations', 'translations.for_id = ads_tbls.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'ads');
        if (!empty($big_get) && isset($big_get['category'])) {
            $this->getFilter($big_get);
        }
        $this->db->where('use_status_id', 1);
        return $this->db->count_all_results('ads_tbls');
    }

    public function sameCagegoryads($categorie, $noId)
    {
        $this->db->select('ads_tbls.id, ads_photo_tbls.image, ads_tbls.url, ads_tbls.origin_price, translations.title, ads_tbls.new_price');
        $this->db->join('translations', 'translations.for_id = ads_tbls.id', 'left');
        $this->db->where('ads_tbls.id !=', $noId);
        $this->db->where('ads_tbls.parent_id =', $categorie);
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'ads');
        $this->db->where('use_status_id', 1);
        
        $this->db->order_by('ads_tbls.id', 'desc');
        $this->db->limit(5);
        $query = $this->db->get('ads_tbls');
        return $query->result_array();
    }
    public function getSliderads()
{
    $this->db->select('ads_tbls.id, ads_photo_tbls.image, ads_tbls.url, translations.price, translations.title, translations.basic_description, translations.old_price');
    $this->db->join('translations', 'translations.for_id = ads_tbls.id', 'left');
    $this->db->join('ads_photo_tbls', 'ads_photo_tbls.ads_id = ads_tbls.id', 'left');
    $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
    $this->db->where('translations.type', 'ads');
    $this->db->where('in_slider', 1);
    
    $query = $this->db->get('ads_tbls');
    return $query->result_array();
}
public function getOneAds($id)
    {
        $this->db->where('ads_tbls.id', $id);

        $this->db->select('ads_tbls.*, translations.title,translations.description, ads_tbls.origin_price, ads_tbls.new_price, ads_tbls.url, trans2.name as categorie_name');

        $this->db->join('translations', 'translations.for_id = ads_tbls.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'ads');

        $this->db->join('translations as trans2', 'trans2.for_id = ads_tbls.parent_id', 'inner');
        $this->db->where('trans2.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('trans2.type', 'parent_id');

        $this->db->where('use_status_id', 1);
        $query = $this->db->get('ads_tbls');
        return $query->row_array();
    }
}






    
    





