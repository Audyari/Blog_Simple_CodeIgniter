<?php
class Blog_model extends CI_Model
{
	public function getBlogs()
	{
		$filter = $this->input->get('find');
		$this->db->like('title', $filter);
		$query = $this->db->get("blog_posts");
		return $query->result_array();
	}
	public function getSingleBlog($field, $value)
	{
		$this->db->where($field, $value);
		$query = $this->db->get('blog_posts');
		return $query->row_array();
	}

	public function insertBlog($data)
	{
		$this->db->insert('blog_posts', $data);
		return $this->db->insert_id();
	}

	public function updateBlog($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('blog_posts', $post);
		return $this->db->affected_rows();
	}

	public function deleteBlog($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blog_posts');
		return $this->db->affected_rows();
	}



}
?>
