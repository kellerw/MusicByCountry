public class Song
{
	public final String name;
	public final String artist;
	public final String url;
	public Song(String name, String artist, String url)
	{
		this.name = name;
		this.artist = artist;
		this.url = url;
	}
	public Song(String[] parts)
	{
		this(parts[0], parts[1], parts[2]);
	}
	public String toString()
	{
		return name + "," + artist + "," + url;
	}
}