public class MainImplementation implements MainInterface
{
	private SongFetcher fetcher = new SongFetcher();
	public MainImplementation()
	{
		loadSongCaches();
		update();
	}
	public Song[] loadSongCaches()
	{
		return null;
	}
	public void update()
	{
	}
	public Song[] getSongs(String country)
	{
		String[][] songinfo = fetcher.getTopSongsByCountry(country);
		//cache.getSongs(country);
		Song[] songs = new Song[songinfo.length];
		for(int i = 0; i < songs.length; i++)
		{
			songs[i] = new Song(songinfo[i][0], songinfo[i][1], 
				YouTube.getURL(songinfo[i][0], songinfo[i][1]),
				GoogleImages.getURL(songinfo[i][0], songinfo[i][1]));
		}
		return songs;
	}
}