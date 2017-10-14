public class Song
{
	public final String name;
	public final String artist;
	public final String url;
	public final String image;
	public Song(String name, String artist, String url, String image)
	{
		this.name = name;
		this.artist = artist;
		this.url = url;
		this.image = image;
	}
	public Song(String[] parts)
	{
		this(parts[0], parts[1], parts[2], parts[3]);
	}
	public String toString()
	{
		return name + "," + artist + "," + url + "," + image;
	}
}