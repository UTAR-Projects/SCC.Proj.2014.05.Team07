
import static org.junit.Assert.*;



import org.junit.Test;


public class TestCase {

	@Test
	public void test() {
		MyLibrarian myLibrarian = new MyLibrarian();
		String testschool = "UTAR";
		String trueAns = myLibrarian.schoolName();
		
		assertEquals(testschool,trueAns);
	}

}
